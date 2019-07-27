$(document).ready(function() {
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });

    $("#add").click(function() {
        var test = this;
        console.log($('input[name=name]').val());
        $.ajax({
            type: 'post',
            url: '/api/addName',
            data: {
                '_token': $('input[name=_token]').val(),
                'name': $('input[name=name]').val()
            },
            success: function(data) {
                if ((data.errors)){
                  $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {
                    $('.error').addClass('hidden');
                    $('#table').append("<tr class='item" + data.id + "'><td>" + data.name + "</td><td><button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-minus'></span></button></td></tr>");
                }
            },
        });
        $('#name').val('');
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/api/deleteName',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });

    $("#selectWinner").click(function() {
        var buttonClickedID = this;
        $('#errorSelectWinners').removeClass('selectWinnerError');
        console.log($('input[name=numberOfWinners]').val());
        $.ajax({
            type: 'POST',
            url: '/api/selectWinner',
            data: {
                '_token': $('input[name=_token]').val(),
                'numberOfWinners': $('input[name=numberOfWinners]').val()
            },
            success: function(Response) {
                if ((Response.errors)){
                    $('#errorSelectWinners').removeClass('hidden');
                    $('#errorSelectWinners').addClass('selectWinnerError');
                    $('#errorSelectWinners').html(Response.errors.numberOfWinners);
                }
                else {
                    $('#errorSelectWinners').addClass('hidden');
                    console.log("This is sels output", Response);
                    winners = '<div class="winnerStyle table table-borderless fontHeaderWinner">Winners are: ';
                    winners += '<table class="fontElementsWinner">';

                    $.each(Response, function(i){
                        winners += '<tr><td>' + Response[i].name + '</td></tr>';
                    })
                    winners += '</table></div>';
                    $('#results').html(winners);
                }
            }
        });
        $('#numberOfWinners').val('');
    });
});
