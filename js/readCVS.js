<script type="text/javascript">
$.get('/file-path/demo.csv', function(data) {
var build = '<table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="100%">\n';
var head = data.split("\n");
for(var i=0;i<1;i++){
build += "<tr><th>" + head[i] + "</th></tr>";
for(var i=1;i<head.length;i++){
build += "<tr><td>" + head[i].split("\n") + "</td></tr>";
}
}
build += "</table>";
$('#wrap').append(build);
});
</script>