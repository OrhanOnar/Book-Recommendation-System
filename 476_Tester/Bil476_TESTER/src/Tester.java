
public class Tester {
public static void main(String[] args) {
	
	
	String [ ] kitaplar= new String [10] ;

	int [ ] Rating= new int [10] ;

	int [ ] CalculatedScores= new int [10] ;

	double error1=0;
	double error2=0;

	double MAE=0;
	double RMSE=0;
	
	
	
	kitaplar[0]="Youth Softball: A Complete Handbook";
	kitaplar[1]="Your Owner's Manual";
	kitaplar[2]="Robin Hood";
	kitaplar[3]="You Can't Make Me Angry";
	kitaplar[4]="If I Stay";
	kitaplar[5]="On the Island";
	kitaplar[6]="The Zombie Survival Guide: Recorded Attacks";
	kitaplar[7]="King James Version Teen Study Bible";
	kitaplar[8]="A Pocket Style Manual, Fifth Edition";
	kitaplar[9]="Alexander's Surgical Procedures, 1e";

	
	
	Rating[0]=7;
	Rating[1]=5;
	Rating[2]=9;
	Rating[3]=4;
	Rating[4]=4;
	Rating[5]=8;
	Rating[6]=8;
	Rating[7]=4;
	Rating[8]=8;
	Rating[9]=4;

	
	
	
	

	CalculatedScores[0]=9;
	CalculatedScores[1]=3;
	CalculatedScores[2]=6;
	CalculatedScores[3]=5;
	CalculatedScores[4]=5;
	CalculatedScores[5]=9;
	CalculatedScores[6]=2;
	CalculatedScores[7]=6;
	CalculatedScores[8]=7;
	CalculatedScores[9]=5;
	
	
	
	
	
	for (int i = 0; i < CalculatedScores.length; i++) {
		
	error1+=	CalculatedScores[i]-Rating[i];
	
		
	}
	
	MAE=error1/CalculatedScores.length;
	
	
	for (int j = 0; j < CalculatedScores.length; j++) {
		
	error2+=Math.pow(CalculatedScores[j]-Rating[j], 2);
		
	}
	
	

	
	RMSE=error2/CalculatedScores.length;
	
	RMSE=Math.sqrt(RMSE);
	
	if(MAE<0)
		MAE=MAE*-1;
	
	
	
	System.out.println("MAE:"+MAE);
	
	System.out.println("RMSE:"+RMSE);

	
	
}
}
