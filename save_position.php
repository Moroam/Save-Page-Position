<?php

function set_position(){
?>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function(){
    const forms = document.querySelectorAll('#page form');
    [...forms].forEach((form) => {
      form.addEventListener("submit", function(event) {
        let input = document.createElement("input");
        input.type = "hidden";
        input.name = "position";
        input.value = document.documentElement.scrollTop || document.body.scrollTop;
        form.appendChild(input);
      });
    });
    document.documentElement.scrollTop = document.body.scrollTop = <?=($_POST['position']??0)?>;
  });
</script>
<?php
}
