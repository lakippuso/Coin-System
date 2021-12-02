<?php
    include 'config.php';
    include '../resources/lib/tcpdf/tcpdf.php';
    session_start();
    //Generate Report
    if(isset($_POST['generate'])){ 
        //Execute MySQL
        $username = $_SESSION['session_username'];
        $query="SELECT * FROM daily_report where username = '$username'";

        //Get values for MySQL
        if(isset($_POST['search_id'])){
            $search_id = $_POST['search_id'];
            if(!empty($search_id)){
                $search_id = implode(',',$search_id);
                if($search_id != "All Machines"){
                    $query = $query."AND machine_id IN ($search_id)";
                }
            }
        }
        if(isset($_POST['start_date']) && isset($_POST['end_date'])){
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            if(!empty($start_date) && !empty($end_date)){
                // echo "Start Date: ".$start_date."<br>";
                // echo "End Date: ".$end_date."<br>";
                $query = $query."AND date BETWEEN '$start_date' AND '$end_date'";
            }
            else if(!empty($start_date)){
                $query = $query."AND date = '$start_date'";
            }
        }

        $query = $query."ORDER BY date DESC";
        $result= $con->query($query);
        
        // $obj_pdf->AddPage();  
        $content = '';  
        $content .= '  
        <h4 align="center">Coin Counter Report</h4><br /> 
        <table border="1" cellspacing="0" cellpadding="3">  
            <tr>  
                <th width="30%">Date</th>  
                <th width="5%">Machine_id</th>  
                <th width="15%">Income</th>  
            </tr>  
        ';  
        while($rows= $result-> fetch_assoc())  
        {       
        $content .= '<tr>
                        <th scope="col">'.$rows['date'].'</th>
                        <th scope="col">'.$rows['machine_id'].'</th>
                        <th scope="col">'.$rows['day_income'].'</th>
                    </tr>';  
        }  
        //Create PDF
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
        $obj_pdf->AddPage();  
        $content .= '</table>';
        $obj_pdf->writeHTML($content);  
        $obj_pdf->Output('file.pdf', 'I');  
        
    }
    //Search Daily Report
    if(isset($_POST['filter'])){
        $location = "Location: ../dailyreport.php?";
        if(isset($_POST['start_date'])) {
            $location .= "&start_date=".$_POST['start_date'];
        }
        if(isset($_POST['end_date'])) { 
            $location .= "&end_date=".$_POST['end_date'];
        }
        if(isset($_POST['search_id'])) {
            $location .= "&search_id=".implode(", ",$_POST['search_id']);
        }
        header($location);
        exit();
    }