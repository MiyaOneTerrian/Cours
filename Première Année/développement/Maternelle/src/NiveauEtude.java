import java.util.Scanner;

public class NiveauEtude {
	private int code ; 
	private String libelle ; 
	
	public NiveauEtude ()
	{
		this.code = 0;
		this.libelle = "";
		
	}
	public void saisir () {
		Scanner sc = new Scanner (System.in);
		System.out.println("Le code : ");
		this.code = sc.nextInt();
		System.out.println("Le libelle : ");
		this.libelle = sc.next();
		
	}
	public void afficher() {
		System.out.println("Le code est : " + this.code);
		System.out.println("Le libelle est : " + this.libelle);
		
	}
	public String toString () {
		
		return this.code +" ; " + this.libelle;
	}
	public String toXml() {
		 String chaine = "";
		 chaine = "<NiveauEtude> \n";
		 chaine += "<code>" + this.code + "</code> \n";
		 chaine += "<libelle>" + this.libelle + "</libelle> \n";
		 chaine += "</NiveauEtude>\n";
		 return chaine;
		 
		
	}
	public int getCode() {
		return code;
	}
	public void setCode(int code) {
		this.code = code;
	}
	public String getLibelle() {
		return libelle;
	}
	public void setLibelle(String libelle) {
		this.libelle = libelle;
	}
	
	//getters and setters  
	
}
