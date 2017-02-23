window.addEventListener('load', function () {
  var xml = new XMLHttpRequest();
  var query = new FormData();
  query.append("query","js");
  xml.addEventListener('readystatechange', function () {
    if (xml.status === 200 && xml.readyState === 4) {
      getData(xml);
    }
  })
  xml.open('POST', 'getData.php');
  xml.send(query);
});

function getData(xml) {
  var data = xml.responseText;
  console.log(data);
}
