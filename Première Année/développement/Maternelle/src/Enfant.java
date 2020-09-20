import java.util.Scanner;

public class Enfant {
		private String nom, prenom; 
		private int age ; 
		
		public Enfant ()
		{
			this.nom = ""; 
			this.prenom =""; 
			this.age = 0; 
		}
		public void saisir ()
		{
			Scanner sc= new Scanner (System.in);
			System.out.println("Le nom de l'enfant : ");
			this.nom = sc.next();
			System.out.println("Le prenom de l'enfant : ");
			this.prenom = sc.next();
			System.out.println("L'age de l'enfant : ");
			this.age = sc.nextInt();
		}
		public void afficher() 
		{
			System.out.println("Nom de l'enfant    : " + this.nom);
			System.out.println("Prenom de l'enfant : " + this.prenom);
			System.out.println("Age de l'enfant    : " + this.age);
		}
		
		public String toString () 
		{
			return this.nom + " ; " + this.prenom + " ; " + this.age ; 
		}
		public String toXml ()
		{
			String chaine =""; 
			chaine  = "<enfant> \n ";
			chaine += "<nom>"+ this.nom + "</nom> \n";
			chaine += "<prenom>"+ this.prenom + "</prenom> \n";
			chaine += "<age>"+ this.age + "</age> \n";
			chaine += "</enfant>\n";
			return chaine;
		}
		
		//getters and setters 
		
		public String getNom() {
			return nom;
		}
		public void setNom(String nom) {
			this.nom = nom;
		}
		public String getPrenom() {
			return prenom;
		}
		public void setPrenom(String prenom) {
			this.prenom = prenom;
		}
		public int getAge() {
			return age;
		}
		public void setAge(int age) {
			this.age = age;
		}
}







