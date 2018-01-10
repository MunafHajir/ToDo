<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <div id="diaryTimeline">
    <div class="timeline">
      <div class="col-md-12">
        <!-- Line component -->
        <div class="line text-muted"></div>
        <!-- ajax started -->
  
        <!-- ajax end -->
        <!-- Panel -->
        <?php for ($i=sizeof($diarydb)-1; $i>=0; $i--): ?>
        <article class="panel panel-primary">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->

            <!-- Heading -->
            <div class="panel-heading">
                <h2 class="panel-title"><?= $diarydb[$i]->Day?></h2>
            </div>
            <!-- /Heading -->

            <!-- Body -->
            <div class="panel-body">
                <?= $diarydb[$i]->Note ?>
            </div>
            <!-- /Body -->


        </article>
        <?php endfor; ?>
        <!-- /Panel -->


</div>
</div>
</div>

<script type="text/javascript">

  function dis(){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET',"select.php",false);
    xmlhttp.send(null);
    var ourData = xmlhttp.responseText;
    console.log(ourData);
  }
dis();
setinterval (function(){
  dis();
},2000);

</script>
  </body>
</html>
