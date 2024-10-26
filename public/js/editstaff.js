$(document).on('click', '.editBtn', function() {
    var id = $(this).data('id');
    
    // You could also use an AJAX call to get more data from the server if needed
    $.ajax({
        url: '/items/' + id + '/edit',  // Adjust your route accordingly
        method: 'GET',
        success: function(data) {
            // Populate the modal fields with data
            $('#itemId').val(data.id);
            $('#itemName').val(data.name);
            // Other fields...
            $('#editForm').attr('action', '/items/' + id);  // Update form action URL
        }
    });
});