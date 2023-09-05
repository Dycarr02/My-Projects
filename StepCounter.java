public class Tester {
    public static void main(String[] args) {
        StepCounter counter1 = new StepCounter(Units.FEET);
        System.out.println(counter1.toString()); 
        counter1.addSteps(10);
        System.out.println(counter1.toString()); 
        
        StepCounter counter2 = new StepCounter(Units.METRES);
        counter2.addSteps(5);
        System.out.println(counter2.toString()); 

        counter1.resetSteps();
        System.out.println(counter1.toString()); 

        counter1.setUnits(Units.METRES);
        System.out.println(counter1.toString()); 
    }
}

public class StepCounter implements StepInterface {
    private int steps;
    private double distance;
    private Units units;


    public StepCounter(Units units) {
        this.steps = 0;
        this.distance = 0.0;
        this.units = units;
    }

   
    public void addSteps(int steps) {
        this.steps += steps;
        if (units == Units.FEET) {
            this.distance += steps * 2.2;
        } else {
            this.distance += steps * 0.7;
        }
    }

    public void resetSteps() {
        this.steps = 0;
        this.distance = 0.0;
    }

    public void setUnits(Units units) {
        this.units = units;
        if (units == Units.FEET) {
            this.distance = this.steps * 2.2;
        } else {
            this.distance = this.steps * 0.7;
        }
    }

    public String toString() {
        return "StepCounter [steps=" + steps + ", distance=" + distance + ", units=" + units + "]";
    }
}

enum Units {
    FEET,
    METRES
}
interface StepInterface {
    void addSteps(int steps);
    void resetSteps();
    void setUnits(Units units);
    String toString();
}
