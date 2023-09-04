package project1;
import java.util.Scanner;

public class Arithmetic {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        System.out.print("Enter the first value: ");
        int value1 = scanner.nextInt();
        
        System.out.print("Enter the second value: ");
        int value2 = scanner.nextInt();
        
        int answer, remainder;
        
        if (value2 == 0) {
            System.out.println("Division by zero is not allowed!");
            return;
        }
        
        answer = value1 / value2;  // integer division
        remainder = value1 % value2;  // remainder part

        System.out.println("Value1: " + value1 + " Value2: " + value2);
        System.out.println("Answer: " + answer);
        System.out.println("Remainder: " + remainder);
        
        double dblValue = value1 / (double)value2;  // type casting to
    }
}