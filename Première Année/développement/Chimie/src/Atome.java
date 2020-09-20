import java.util.Scanner;

public class Atome {
	private String symbole, designation;
	private int masse;
	
	public Atome() {
		this.symbole = "";
		this.designation = "";
		this.masse = 0;
	}
	
	public void saisir() {
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Donner le Symbole de l'atom : ");
		this.symbole = sc.next();
		
		System.out.println("Donner la designation de l'atom : ");
		this.designation = sc.next();
		
		System.out.println("Donner la masse de l'atom : ");
		this.masse = sc.nextInt();
	}
	
	public void afficher() {
		System.out.println("la designation est :" + this.designation + " Le symbol est " + this.symbole + " La masse est " + this.masse);
	}
	
	// getters and setters
	
	public String getSymbole() {
		return symbole;
	}

	public void setSymbole(String symbole) {
		this.symbole = symbole;
	}

	public String getDesignation() {
		return designation;
	}

	public void setDesignation(String designation) {
		this.designation = designation;
	}

	public int getMasse() {
		return masse;
	}

	public void setMasse(int masse) {
		this.masse = masse;
	}
}
