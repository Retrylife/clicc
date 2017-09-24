var url = "https://clicc-bd5d6.firebaseio.com/";

var firebaseRef = new Firebase(url);

function funct1(evt)
{
  var title = $('#post-title').text();

  var post = $('#post-content').text();

  var date = Date();

  firebaseRef.set({Title: title, Content: post, Date: date});
  evt.preventDefault();
}

var submit = document.getElementsByTagName('button')[0];

submit.onclick = funct1;
