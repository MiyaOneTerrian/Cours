
public class Stock {
	
	public static void main(String args[]) {
		
		//Instantiation de la classe Produit
		Produit unProduit = new Produit();
		
		// appel de la méthode saisir
		unProduit.saisir();
		
		// appel de la méthode afficher
		unProduit.afficher();
		
		// appel de la méthode calculer
		System.out.println("Le Chiffre d'affaire est de : " + unProduit.calculer());
	}
}
