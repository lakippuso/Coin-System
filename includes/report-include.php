<?php
    include 'config.php';
    session_start();
    //Generate Report
    if(isset($_POST['generate'])){ 
        //Execute MySQL
        $username = $_SESSION['session_username'];
        //GET DATA FOR HEADER OF PDF
        $query="SELECT * FROM users WHERE username = '$username'";
        $result= $con->query($query);
        while($rows= $result-> fetch_assoc())  
        {       
            $firstname = $rows['first_name'];
            $middlename = $rows['middle_name'];
            $lastname = $rows['last_name'];
            $business_add = $rows['business_add'];
            $business_name = $rows['business_name'];
            $contact = $rows['contact_no'];
        }

        //SELECTION IN DAILY REPORT
        $query="SELECT * FROM daily_report LEFT JOIN machine_info ON daily_report.machine_id = machine_info.machine_id WHERE machine_info.username = '$username'";

        if(isset($_POST['search_id']) && $_POST['search_id'] != ''){
            $search_id = implode("','",$_POST['search_id']);
            $search_id = "'".$search_id."'";
            if(!empty($search_id)){
                if($search_id != "All Machines"){
                    $query = $query."AND machine_info.machine_name IN ($search_id)";
                }
            }
        }
        if(isset($_POST['start_date']) && $_POST['start_date'] != ''){
            $start_date = $_POST['start_date'];
            if(isset($_POST['end_date'])){
                $end_date = $_POST['end_date'];
            }
            if(!empty($start_date) && !empty($end_date)){
                // echo "Start Date: ".$start_date."<br>";
                // echo "End Date: ".$end_date."<br>";
                $query = $query."AND date BETWEEN '$start_date' AND '$end_date'";
            }
            else if(!empty($start_date)){
                if(strlen($start_date) == 7){
                    $str = substr($start_date, 5);
                    $query = $query."AND MONTH(date) = '$str'";
                }
                else if(strlen($start_date) == 8){
                    $str = substr($start_date, 6);
                    $query = $query."AND WEEK(date) = '$str'";
                }
                else{
                    $query = $query."AND date = '$start_date'";
                }
            }
        }
        else if(isset($_POST['year']) && $_POST['year'] != ''){
            $year = $_POST['year'];
            if($year != ''){
                $query = $query."AND YEAR(date) = '$year'";
            }
        }
        
        $query = $query."ORDER BY date DESC";
        $result= $con->query($query);

        if($middlename != '' || $middlename == NULL){
            $middlename.=".";
        }
        $date_now = date('m-d-Y');
        $fullname = $firstname." ".$middlename." ".$lastname;
        $content = '';  
        $content .= '       
        <table align="center" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="20%"></td>
                <td align="center" width="60%" style="font-size: 20px;">'.$business_name.'</td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td align="center" width="60%" style="font-size: 8px;">'.$business_add.'</td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="20%"></td>
                <td align="center" width="60%" style="font-size: 8px;">'.$contact.'</td>
                <td width="20%"></td>
            </tr>
            <tr>
                <td width="40%" ><label for="">Name: </label><span>'.$fullname.'</span></td>
                <td width="20%" ></td>
                <td width="40%" ><label for="">Date: </label><span>'.$date_now.'</span></td>
            </tr>
        </table>
        <h4 align="center">Coin Counter Report</h4><br/> 
        <table align="center" border="1" cellspacing="0" cellpadding="3">  
            <tr style="background-color:#2b7e7a; color:white">  
                <th width="20%">Date</th>  
                <th width="30%">Machine ID</th>
                <th width="30%">Machine Name</th>  
                <th width="20%">Income</th>  
            </tr>  
        ';  
        while($rows= $result-> fetch_assoc())  
        {       
        $content .= '<tr>
                        <th scope="col">'.$rows['date'].'</th>
                        <th scope="col">'.$rows['machine_id'].'</th>
                        <th scope="col">'.$rows['machine_name'].'</th>
                        <th scope="col">??? '.$rows['day_income'].'</th>
                    </tr>';  
        }
        
        //Filter for Total Income
        $query="SELECT SUM(day_income) as total FROM daily_report LEFT JOIN machine_info ON daily_report.machine_id = machine_info.machine_id WHERE machine_info.username = '$username'";
        if(isset($_POST['search_id']) && $_POST['search_id'] != ''){
            $search_id = implode("', '",$_POST['search_id']);
            $search_id = "'".$search_id."'";
            if(!empty($search_id)){
                if($search_id != "All Machines"){
                    $query = $query."AND machine_info.machine_name IN ($search_id)";
                }
            }
        }
        if(isset($_POST['start_date']) && $_POST['start_date'] != ''){
            $start_date = $_POST['start_date'];
            if(isset($_POST['end_date'])){
                $end_date = $_POST['end_date'];
            }
            if(!empty($start_date) && !empty($end_date)){
                // echo "Start Date: ".$start_date."<br>";
                // echo "End Date: ".$end_date."<br>";
                $query = $query."AND date BETWEEN '$start_date' AND '$end_date'";
            }
            else if(!empty($start_date)){
                if(strlen($start_date) == 7){
                    $str = substr($start_date, 5);
                    $query = $query."AND MONTH(date) = '$str'";
                }
                else if(strlen($start_date) == 8){
                    $str = substr($start_date, 6);
                    $query = $query."AND WEEK(date) = '$str'";
                }
                else{
                    $query = $query."AND date = '$start_date'";
                }
            }
        }
        else if(isset($_POST['year']) && $_POST['year'] != ''){
            $year = $_POST['year'];
            if($year != ''){
                $query = $query."AND YEAR(date) = '$year'";
            }
        }
        $result= $con->query($query);
        while($rows= $result-> fetch_assoc())
        {
        $content .= '<tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Total Income: ??? '.$rows['total'].'</th>
                    </tr>';  
                
        } 
        //Create PDF
        
        //MPDF SETTINGS
        // require_once __DIR__ . '../resources/lib/vendor/autoload.php';
        // $mpdf = new \Mpdf\Mpdf();

        //TCPDF SETTINGS
        include '../resources/lib/tcpdf/tcpdf.php';

        $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
        $obj_pdf->SetCreator(PDF_CREATOR);
        $obj_pdf->SetTitle("Coin Counter Report");  
        $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
        $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
        $obj_pdf->SetDefaultMonospacedFont('helvetica');  
        $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
        $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
        $obj_pdf->setPrintHeader(false);  
        $obj_pdf->setPrintFooter(false);  
        $obj_pdf->SetAutoPageBreak(TRUE, 10);  
        $obj_pdf->SetFont('helvetica', '', 11);  
        $image_file = "../resources/images/GeekCoin.png";
        $obj_pdf->AddPage();

        $content .= '</table>';

        //TCPDF WRITE
        $obj_pdf->writeHTML($content);
        $obj_pdf->Output('file.pdf', 'I');
        //MPDF WRITE
        // $mpdf->WriteHTML($content);
        // $mpdf->Output('file.pdf','I');
        
    }
    //Search Daily Report
    if(isset($_POST['filter'])){
        // $end = $_POST['end_date'];
        // $start = $_POST['start_date'];
        // $start_year = $_POST['start_year'];
        // $filter = $_POST['filter'];
        // $id = $_POST['search_id'];

        // echo implode(', ',$id)."<br>";
        // echo $end."<br>";
        // echo $start."<br>";
        // echo $start_year."<br>";
        // echo $filter."<br>";
        $i = 1;
        $username = $_SESSION['session_username'];
        $query="SELECT * FROM daily_report LEFT JOIN machine_info ON daily_report.machine_id = machine_info.machine_id WHERE machine_info.username = '$username'";

        if(isset($_POST['search_id']) && $_POST['search_id'] != ''){
            $search_id = implode("', '",$_POST['search_id']);
            $search_id = "'".$search_id."'";
            if(!empty($search_id)){
                if($search_id != "All Machines"){
                    $query = $query."AND machine_info.machine_name IN ($search_id)";
                }
            }
        }
        if(isset($_POST['start_date']) && $_POST['start_date'] != ''){
            $start_date = $_POST['start_date'];
            if(isset($_POST['end_date'])){
                $end_date = $_POST['end_date'];
            }
            if(!empty($start_date) && !empty($end_date)){
                // echo "Start Date: ".$start_date."<br>";
                // echo "End Date: ".$end_date."<br>";
                $query = $query."AND date BETWEEN '$start_date' AND '$end_date'";
            }
            else if(!empty($start_date)){
                if(strlen($start_date) == 7){
                    $str = substr($start_date, 5);
                    $query = $query."AND MONTH(date) = '$str'";
                }
                else if(strlen($start_date) == 8){
                    $str = substr($start_date, 6);
                    $query = $query."AND WEEK(date) = '$str'";
                }
                else{
                    $query = $query."AND date = '$start_date'";
                }
            }
        }
        else if(isset($_POST['year']) && $_POST['year'] != ''){
            $year = $_POST['year'];
            if($year != ''){
                $query = $query."AND YEAR(date) = '$year'";
            }
        }

        //DISPLAY SECTION
        $query = $query."ORDER BY date DESC";
        $result= $con->query($query);
        while($rows= $result-> fetch_assoc())
        {
            echo '<tr>';
            echo '    <th scope="col">'.$i.'</th>';
            echo '    <th scope="col">'.$rows['machine_id'].'</th>';
            echo '    <th scope="col">'.$rows['machine_name'].'</th>';
            echo '    <th scope="col">'.$rows['date'].'</th>';
            echo '    <th scope="col">??? '.$rows['day_income'].'</th>';
            echo '</tr>';
            $i+=1;
        }



        //Filter for Total Income
        $query="SELECT SUM(day_income) as total FROM daily_report LEFT JOIN machine_info ON daily_report.machine_id = machine_info.machine_id WHERE machine_info.username = '$username'";
        if(isset($_POST['search_id']) && $_POST['search_id'] != ''){
            $search_id = implode("', '",$_POST['search_id']);
            $search_id = "'".$search_id."'";
            if(!empty($search_id)){
                if($search_id != "All Machines"){
                    $query = $query."AND machine_info.machine_name IN ($search_id)";
                }
            }
        }
        if(isset($_POST['start_date']) && $_POST['start_date'] != ''){
            $start_date = $_POST['start_date'];
            if(isset($_POST['end_date'])){
                $end_date = $_POST['end_date'];
            }
            if(!empty($start_date) && !empty($end_date)){
                // echo "Start Date: ".$start_date."<br>";
                // echo "End Date: ".$end_date."<br>";
                $query = $query."AND date BETWEEN '$start_date' AND '$end_date'";
            }
            else if(!empty($start_date)){
                if(strlen($start_date) == 7){
                    $str = substr($start_date, 5);
                    $query = $query."AND MONTH(date) = '$str'";
                }
                else if(strlen($start_date) == 8){
                    $str = substr($start_date, 6);
                    $query = $query."AND WEEK(date) = '$str'";
                }
                else{
                    $query = $query."AND date = '$start_date'";
                }
            }
        }
        else if(isset($_POST['year']) && $_POST['year'] != ''){
            $year = $_POST['year'];
            if($year != ''){
                $query = $query."AND YEAR(date) = '$year'";
            }
        }
        $result= $con->query($query);
        while($rows= $result-> fetch_assoc())
        {
        ?>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"><?php echo "Total Income:??? ".$rows['total']?></th>
                </tr>
        <?php
        }


        // $location = "Location: ../dailyreport.php?";
        // if(isset($_POST['start_date']) && $_POST['start_date'] != '') {
        //     $location .= "&start_date=".$_POST['start_date'];
        //     if(isset($_POST['end_date']) && $_POST['end_date'] != '') { 
        //         $location .= "&end_date=".$_POST['end_date'];
        //     }
        // }
        // else if(isset($_POST['start_year']) && $_POST['start_year'] != ''){
        //     $location .= "year=".$_POST['start_year'];
        // }
        // if(isset($_POST['search_id'])) {
        //     $location .= "&search_id=".implode(", ",$_POST['search_id']);
        // }
        // // echo $location;
        // header($location);
        // exit();
    }