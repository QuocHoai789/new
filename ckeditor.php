<html>
<head>
   <!-- <script src="ckeditor_standard/ckeditor/ckeditor.js"></script> -->
   <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
   <form >
      <textarea name="ten" id="ten" class="ckeditor"></textarea>
      <!-- <script>CKEDITOR.replace('ten');</script> -->
   </form>
</body>
</html>

<!-- Chú ý:

-- Chèn script Ckeditor: <script src="ckeditor/ckeditor.js"></script>
-- Khai báo CKEditor: <script>CKEDITOR.replace('ten');</script>. Trong dó “ten” là id của textarea -->

<?php
$date = Date("Y-m-d");
echo $date;
// INSERT INTO xxx(date) VALUES('2019-05-02')

// INSERT INTO loaiday(idDay, TenDay, idTH, idCL) VALUES ('1', 'yyyyy', '1', '2')
?>

