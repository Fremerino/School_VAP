package sample;

import javafx.event.ActionEvent;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;

import java.util.InputMismatchException;

public class Controller {
    public TextField pole1;
    public TextField pole2;
    public Label vysledek;
    public Button krat;
    public Button deleno;
    public Button minus;
    public Button plus;
    public Button vypocitat;
    public int pocet;

    public void plusA(ActionEvent actionEvent) {
        String x = pole1.getText();
        String y = pole2.getText();
        pocet = Integer.parseInt(x)+Integer.parseInt(y);
    }

    public void minusA(ActionEvent actionEvent) {
        String x = pole1.getText();
        String y = pole2.getText();
        pocet = Integer.parseInt(x)-Integer.parseInt(y);
    }
    public void kratA(ActionEvent actionEvent) {
        String x = pole1.getText();
        String y = pole2.getText();
        pocet = Integer.parseInt(x)*Integer.parseInt(y);
    }
    public void delenoA(ActionEvent actionEvent) {
        String x = pole1.getText();
        String y = pole2.getText();
        if(Integer.parseInt(y)!=0) {
            try {
                pocet = Integer.parseInt(x) / Integer.parseInt(y);
            } catch (InputMismatchException e){
                vysledek.setText("="+e);
            }


        }
        else {
            vysledek.setText("Nelze dělit nulou!");
        }
    }

    public void pocitej(ActionEvent actionEvent) {

        vysledek.setText("= "+pocet);
    }
}
