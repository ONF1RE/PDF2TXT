import java.io.File;
import java.io.FileInputStream;
import java.io.FileWriter;
import java.io.IOException;

import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;


public class converter {
    public static void main(String[] args) {
        try {
            //Loading the pdf file into PDDocument
            File MyFile = new File("C:\\xampp\\htdocs\\PDF2TXT\\pdfuploads\\convert_this.pdf");

            FileInputStream fis = new FileInputStream(MyFile);
            PDDocument MyPDF = PDDocument.load(fis);

            //Initializing The PDFTextStripper class
            PDFTextStripper TextStripper = new PDFTextStripper();

            //Fetching the text from the pdf
            String text = TextStripper.getText(MyPDF);

            //use FileWriter to open the text file and write the text to it
            FileWriter text_file = new FileWriter("C:\\xampp\\htdocs\\PDF2TXT\\converted_txt.txt");

            //Writing text to the text file
            text_file.write(text);
            text_file.close();
            MyPDF.close();
            fis.close();

        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}