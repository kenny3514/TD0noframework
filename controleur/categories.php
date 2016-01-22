<?php
header( 'content-type: text/html; charset=utf-8' );
require 'modele\logsql.php';
include 'modele/fonctions.php';




$scope_names = null; 
if(isset($_GET['classement']))
{
	$joueurs = "
<div class='table-responsive'>
				<table class='table'>
				<thead>
				<tr>
					<th>RANG</th>
					<th>PRENOM</th>
					<th>NOM</th>
					<th>CODE PAYS</th>
				</tr>
				</thead>
				";
	$donnees = GetRequete($db,"SELECT * FROM joueur 
								join classement on joueur.id = classement.idJoueur order by rang"); $i=0; 
	foreach($donnees as  $cle=>$contenu)
	{
	$scope_names .= "'".$donnees[$i]['prenom']."'".',';
	$joueurs .= '<tr>'.
		'<td>'.$donnees[$i]['rang'].'</td>'.
		'<td>'.$donnees[$i]['prenom'].'</td>'.
		'<td>'.$donnees[$i]['nom'].'</td>'.
		'<td>'.$donnees[$i]['codePays'].'</td>'
.'</tr>';

	$i++;
	}
}
elseif(isset($_GET['annee']))
{
	$joueurs = "
<div class='table-responsive'>
				<table class='table'>
				<thead>
				<tr>
					<th>ANNEE</th>
					<th>PRENOM</th>
					<th>NOM</th>
					<th>CODE PAYS</th>
				</tr>
				</thead>
				";
	$donnees = GetRequete($db,"SELECT * FROM joueur 
								join classement on joueur.id = classement.idJoueur order by annee"); $i=0; 
	foreach($donnees as  $cle=>$contenu)
{
	$scope_names .= "'".$donnees[$i]['prenom']."'".',';
	$joueurs .= '<tr>'.
		'<td>'.$donnees[$i]['annee'].'</td>'.
		'<td>'.$donnees[$i]['prenom'].'</td>'.
		'<td>'.$donnees[$i]['nom'].'</td>'.
		'<td>'.$donnees[$i]['codePays'].'</td>'
.'</tr>';

	$i++;
}
}
else
{
	$joueurs = "
<div class='table-responsive'>
				<table class='table'>
				<thead>
				<tr>
					<th>PRENOM</th>
					<th>NOM</th>
					<th>CODE PAYS</th>
				</tr>
				</thead>
				";
	$donnees = GetRequete($db,"SELECT * FROM joueur "); $i=0; 
	foreach($donnees as  $cle=>$contenu)
{
	$scope_names .= "'".$donnees[$i]['prenom']."'".',';
	$joueurs .= '<tr>'.
		'<td>'.$donnees[$i]['prenom'].'</td>'.
		'<td>'.$donnees[$i]['nom'].'</td>'.
		'<td>'.$donnees[$i]['codePays'].'</td>'
.'</tr>';

	$i++;
}
}

$scope_names = substr($scope_names, 0 , -1);
$joueurs .= "</table>
				</div> ";

?>