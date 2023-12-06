let good_button = document.getElementById('good_button');
let good_flag = document.getElementById('good_flag');
good_button.addEventListener('click', function(){ 
    if(good_flag.value == 0){
        fetch('http://localhost:8000/book/good/create', {
            method: 'POST',
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
            good_flag.value = res['good_flag'];
            $('#good_count').html(res['count']);
        })
        .catch(error => {
            console.log(error);
        })
    }else if(good_flag.value == 1){
        fetch('http://localhost:8000/book/good/delete', {
            method: 'POST',
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
            good_flag.value = res['good_flag'];
            $('#good_count').html(res['count']);
        })
        .catch(error => {
            console.error(error);
        })
    }
})