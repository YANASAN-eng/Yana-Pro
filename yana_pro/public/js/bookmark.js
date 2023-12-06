let bookmark_button = document.getElementById('bookmark_button');
let bookmark_flag = document.getElementById('bookmark_flag');
bookmark_button.addEventListener('click', function(){
    if(bookmark_flag.value == 0){
        fetch('http://localhost:8000/book/bookmark/create', {
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Accept": "application/json",
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                'user_id' : $('#user_id').attr('value'),
                'book_id' : $('#book_id').attr('value'),
            }),
        })
        .then(response => response.json())
        .then(res => {
            console.log(res);
            bookmark_flag.value = res['bookmark_flag'];
            $('#bookmark_count').html(res['count']);
        })
        .catch(error => {
            console.log(error);
        })
    }else if(bookmark_flag.value == 1){
        fetch('http://localhost:8000/book/bookmark/delete', {
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                "Accept": "application/json",
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                'user_id' : $('#user_id').attr('value'),
                'book_id' : $('#book_id').attr('value'),
            }),
        })
        .then(response => response.json())
        .then(res => {
            console.log(res);
            bookmark_flag.value = res['bookmark_flag'];
            $('#bookmark_count').html(res['count']);
        })
        .catch(error => {
            console.log(error);
        })
    }
})