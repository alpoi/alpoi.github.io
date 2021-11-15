<?php
$title = "Angus Pointer - CV";
include "/header.php";
?>

<div id="mainbox">
    <div class="cv-section">
        <h1><span class="material-icons">school</span>Placeholder<span onclick="collapse()" id="edu" class="collapse"></span></h1>
            <div class="content-edu">
            </div>
    </div>
</div>

<script type="text/javascript"> /* accordion thing for sections */
    function collapse() {
        event.target.classList.toggle("active");
        var id = event.target.id;
        // console.log(id);
        var section = document.getElementsByClassName('content-' + id)[0];
        // console.log(section);
        if (section.style.maxHeight){
            section.style.maxHeight = null;
        } else {
            section.style.maxHeight = section.scrollHeight + "px";
        }
    }
</script>

<?php
include "/footer.php";
?>