#define coinpin 2
#define servopin 11
#define servopin2 10
#include <Servo.h>

Servo myservo;
Servo myservo2;
int i;
int coin = 0;
int total = 0;
void setup() {
  Serial.begin(9600);
//  pinMode(pin, INPUT_PULLUP);
  attachInterrupt(digitalPinToInterrupt(coinpin),incomingImpuls, FALLING);
  myservo.attach(servopin);
  myservo.write(0);
  myservo2.attach(servopin2);
  myservo2.write(0);

}
void incomingImpuls()
{
  coin=coin+1;
  i=0;
}

void loop() {
    i++;
    Serial.print("i=");
    Serial.print(i);
    Serial.print(" Impulses:");
    Serial.print(coin);
    if(i >10){
      if(coin != 0){
//        if(coin == 1){
//          total = 1;
//        }
//        if(coin == 5){
//          total = 5;
//          myservo2.write(0);
//        }
//        if(coin == 10){
//          
//          total = 10;
//        }
        if(coin>0&&coin<10){
          myservo2.write(0);
          total = 5;
        }
        if(coin>=10){
          total = 10;
        }
        delay(1500);
        myservo.write(50);
        delay(1500);
        myservo.write(0);
        myservo2.write(90);
        coin = 0;
      }
    }
    Serial.print(" Value:");
    Serial.println(total);
}
