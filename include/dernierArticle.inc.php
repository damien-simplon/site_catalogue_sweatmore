<?php
if(isset($_SESSION['user-id'])){
    $recupId = $bdd->prepare('SELECT email FROM users WHERE id = :id');
    $id = $_SESSION['user-id'];
    $recupId->bindParam(":id",$id);
    $recupId->execute();
    
    $insertDernierArticle = $bdd->prepare('UPDATE users SET dernier_article = :dernier_article WHERE id = :id');
    $nomPage = $_SERVER['PHP_SELF'];
    $dernier_article_cat_explode = explode("/",$nomPage);
    $dernier_article_cat = $dernier_article_cat_explode[2];
    $dernier_article_produit_explode = explode(".",$dernier_article_cat_explode[3]);
    $dernier_article_produit = substr($dernier_article_produit_explode[0],-1);
    $dernier_article = $dernier_article_cat . " " . $dernier_article_produit;
    //$dernier_article_cat = substr($nomPage,strlen($nomPage)-5);
    $insertDernierArticle->bindParam(":dernier_article",$dernier_article);
    $insertDernierArticle->bindParam(":id",$id);
    $insertDernierArticle->execute();
}
?>