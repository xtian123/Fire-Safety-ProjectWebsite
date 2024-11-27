function reply(id, name){
    title = document.getElementById('title')
    title.innerHTML = "Reply to " + name
    document.getElementById('reply_id').value  = id;

}