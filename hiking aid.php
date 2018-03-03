#include <LiquidCrystal.h>
// initialize the library with the numbers of the interface pins
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);
int sensorPin1 = A0;    // select the input pin for the potentiometer
int sensorPin2 = A1;
int sensorPin3 = A2;
int motor = 13;      // select the pin for the LED
int sensorValue1= 0;
int sensorValue2 = 0;
int sensorValue3 = 0;
void setup()
{
pinMode(motor, OUTPUT);
lcd.begin(16, 2);
// Print a message to the LCD.
lcd.setCursor(0, 0);
lcd.print("     WALKING    ");
lcd.setCursor(0, 1);
lcd.print("   ASSISTANCE   ");
delay(1000);
// declare the ledPin as an OUTPUT:
lcd.clear();
}
void loop() {
// read the value from the sensor:
sensorValue1 = analogRead(sensorPin1);
sensorValue2 = analogRead(sensorPin2);
sensorValue3 = analogRead(sensorPin3);
lcd.setCursor(0, 0);
lcd.print("s1:");
lcd.setCursor(3, 0);
lcd.print(sensorValue1);
lcd.setCursor(7, 0);
lcd.print("s2:");
lcd.setCursor(10, 0);
lcd.print(sensorValue2);
lcd.setCursor(0, 1);
lcd.print("s3:");
lcd.setCursor(4, 1);
lcd.print(sensorValue3);
lcd.setCursor(8, 1);
lcd.print("        ");
delay(1000);
lcd.clear();
if(sensorValue1>720)
{
lcd.setCursor(0, 1);
lcd.print("    FORWARD     ");
digitalWrite(motor, HIGH);
delay(3000);
digitalWrite(motor, LOW);
}
if(sensorValue2>520)
{
lcd.setCursor(0, 1);
lcd.print("    REVERSE    ");
digitalWrite(motor, HIGH);
delay(3000);
digitalWrite(motor, LOW);
}
}
