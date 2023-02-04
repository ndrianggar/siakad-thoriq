
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <?php
            if($_GET['page'] == 'home'){
                echo "Dasboard";
            }elseif($_GET['page'] == 'data-siswa'){
                echo "Data Siswa";
            }


        ?>


    </h1>
    
</div>

    <?php
        include "routePage.php";
        
    ?>
    <!-- /.container-fluid -->

</div>
