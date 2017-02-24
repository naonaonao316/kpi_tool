function sample() {
  var file_reader = new FileReader();
  //file_reader.addEventListener('load', function( {
    //document.getElementsByClassName("data 2").innerText = file_reader.result;
    //file_reader.readAsText('../data/pie_chart.txt');
  //}));
  file_reader.onload = function(e) {
    var text = file_reader.result;
  }
  alert(file_reader.readAsText("../data/pie_chart.txt"));
}
