<!DOCTYPE html>
<html>
<body>

<h2>My First JavaScript</h2>

<button onclick="getElementById('demo').innerHTML=Date();getElementById('demo').style.fontSize = '35px';">
Click me to display Date and Time.</button>

<p id="demo">hellooo world</p>


<p id="demo2" style="display:none">Hello JavaScript!</p>

<button type="button" onclick="document.getElementById('demo2').style.display='block'">Show!</button>
<button type="button" onclick="document.getElementById('demo2').style.display='none'">Hide!</button>

<button type="button" onclick="writee()">write!</button>
<button type="button" onclick="alertt()">Alert!</button>

<script>
    function writee() {
        document.write("hello");
    }
    function alertt() {
        window.alert("Hello world!");
        window.alert("Hello world!2");
    }
</script>

</body>
</html> 