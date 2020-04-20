package greeds;
import java.util.Scanner;
public class Greeds{
    static int mba=0,ms_mtech=0,mca=0;
    static char ans;
    static String choice,choice1;
    static String ans1;
    static String[] questions={"How good are you in math ?","How good is your managerial skills ?","How good are you at presenting yourself ?","Do you like talking to new people","How do you like solving problem ?","Do you like to know how gadgets work ?","Where do you prefer to live ?"};  
    static String[] opt1={"Very good","Expert","Fair","Very much","Very little","Very little","India"};
    static String[] opt2={"Good","Fairly good","Good","Little","Little","A lot","Abroad"};
    static String[] opt3={"Fair","Good","Expert","Very little","A lot","Little","    "};
    public static void display(int n){
        System.out.println((n+1)+". "+questions[n]);
        System.out.println("a) "+opt1[n]);
        System.out.println("b) "+opt2[n]);
        if(n!=6)
        System.out.println("c) "+opt3[n]);
    }
    public static void main(String[] args) {
        Scanner ss=new Scanner(System.in);
            for(int i=0;i<=5;i++)
            {
                display(i);
                System.out.println("Please enter your choice (a/b/c)");
                ans=ss.next().charAt(0);
                    if(ans=='a')
                        mba++;
                    else if(ans=='b')
                        ms_mtech++;
                    else if(ans=='c')
                        mca++;
                    else
                    {
                        System.out.println("Please enter valid options !");
                        i--;
                        continue;
                    }
            }
            if(mba>ms_mtech&&mba>mca)
                choice="MBA";
            else if(mca>ms_mtech&&mca>mba)
                choice="MCA";
            else
            {
                choice="MS_MTECH";
                display(6);
                 ans=ss.next().charAt(0);
                if(choice.equals("MS_MTECH"))
                {
                     if(ans=='a')
                     choice="M.Tech";
                
                else if(ans=='b')
                    choice="MS";
                }
            }
               
            System.out.println("\nBest course suitable for you is "+choice);
    }     
    
}
