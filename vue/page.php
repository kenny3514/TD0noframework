
<br/><br/><br/><br/>

<div class="container">

  <div class="row">

   <div class="form-group">
    <form class="form-horizontal" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">

      <legend>Affichage joueurs</legend>
    </div>

    <div class="form-group">
      <!--<label for="select" class="col-lg-2 control-label">Catégorie: </label>-->

      <div class="col-lg-6">
        <div ng-app="myApp" ng-controller="namesCtrl">
        <?= $joueurs; ?>
      </div>
<?=
"<div ng-app='myApp' ng-controller='namesCtrl'>

<p>Type a letter in the input field:</p>

<p><input type='text' ng-model='test'></p>

<ul>
  <li ng-repeat='x in names | filter:test'>
    {{ x }}
  </li>
</ul>

</div>";

?>
<script>
angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.names = [
        <?= $scope_names ?>
    ];
});
</script>


      </div>
    </div>

    <div clas="form-group">
      <div class="col-lg-2">

        <!--<button class="pull-right btn btn-default">Envoyer</button>-->
      </div>
      <div class="col-lg-2">
 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Trier par
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
   
    <li name="class" type="submit"><a href="<?=$_SERVER['PHP_SELF'].'?classement'?>">CLASSEMENT</a></li>
    <li name="pays" type="submit"><a href="<?=$_SERVER['PHP_SELF'].'?pays'?>">PAYS</a></li>
    <li name="annee" type="submit"><a href="<?=$_SERVER['PHP_SELF'].'?annee'?>">ANNNE</a></li>

  </ul>
</div>

        </div>
      </div>

    </div>
  </div>
</form>
</div>

</div>



</div> <!-- /container -->
