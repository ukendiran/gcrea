<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/navbar.php'; ?>
<style>
    #board_members ul li {

  margin-top: 10px;
  margin-bottom: 10px;

   list-style: none;
   font-weight:600;
}
#board_members ul li span{
    font-size: 13px;
 color: var(--color-body);
 font-weight: 100;

}


.section{
    padding:40px 0px;
}

/*.bg-blue{*/
/*    background-color:#628bc2;*/
/*}*/
</style>

<div class="jumbotron">
      <h3 class="text-center"> BOARD MEMBERS</h3>
      
    </div>



<?php include_once 'pages/members.php'; ?>
<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/footer_bottom.php'; ?>