var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "https://api.sandbox.splytech.io/");
xhr.setRequestHeader("Authorization", "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJoaWQiOiJ3ZWNoYXQiLCJpYXQiOjE1NjMyOTgxNjksImF1ZCI6InJlc3RhcGkiLCJpc3MiOiJ1cm46c2FuZGJveCIsInN1YiI6InVybjpwYXJ0bmVyOjVkMWI1MDQyMGQ0MmY0YmE2NGRjOGI5NyIsImp0aSI6IkYwbWpwUDZkMHdxZ0N4cis4c3R5d3YzMkhTT3JqQXJPK0ZnTTdYcnVkRkE9In0.ghOS8HSVB8NTaCzXGTi5EKrLDw6ip0QDrLzRgvPQYtM");
xhr.setRequestHeader("User-Agent", "PostmanRuntime/7.15.0");
xhr.setRequestHeader("Accept", "*/*");
xhr.setRequestHeader("Cache-Control", "no-cache");
xhr.setRequestHeader("Postman-Token", "4ce897b7-e2ff-42c9-92c4-fda76a7db859,7210d6ea-4da3-418b-b95f-cc25848a3680");
xhr.setRequestHeader("Host", "api.sandbox.splytech.io");
xhr.setRequestHeader("accept-encoding", "gzip, deflate");
xhr.setRequestHeader("Connection", "keep-alive");
xhr.setRequestHeader("cache-control", "no-cache");

xhr.send(data);