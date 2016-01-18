function showNotify(text, timeout, layout, type, redirect) {

    timeout = timeout || 2000;
    layout = layout || 'center';
    redirect = redirect || null;

    var noty_id = noty({
        text: text,
        layout: layout,
        theme: 'defaultTheme',
        type: type,
        dismissQueue: true, // If you want to use queue feature set this true
        template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
        animation: {
            open: {
                height: 'toggle'
            },
            close: {
                height: 'toggle'
            },
            easing: 'swing',
            speed: 500 // opening & closing animation speed
        },
        timeout: timeout, // delay for closing event. Set false for sticky notifications
        force: false, // adds notification to the beginning of queue when set to true
        modal: false,
        closeWith: ['button'], // ['click', 'button', 'hover']
        callback: {
            onClose: function() {
                if (redirect != null)
                    window.location = redirect;
            }
        }
    })
}

function showConfirmDialog(text, layout, action_function, id_element) {

    noty({
        text: text,
        layout: layout,
        theme: 'defaultTheme',
        type: 'Confirm',
        dismissQueue: false, // If you want to use queue feature set this true
        template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
        animation: {
            open: {
                height: 'toggle'
            },
            close: {
                height: 'toggle'
            },
            easing: 'swing',
            speed: 500 // opening & closing animation speed
        },
        buttons: [
            {
                addClass: 'btn btn-primary',
                text: 'Confirmar',
                onClick: function($noty) {
                    $noty.close();
                    eval(action_function + '(' + id_element + ')');
                }
            },
            {
                addClass: 'btn btn-danger',
                text: 'Cancelar',
                onClick: function($noty) {
                    $noty.close();
                }
            }
        ]
    });
}

function showModalConfirmation(message, title, width, height, text_buttom, action_function, id_element) {

    $('#dialog-modal').attr('title', title);
    $('#dialog-modal p').html(message);
    $('#dialog-modal').dialog({
        resizable: false,
        width: width,
        height: height,
        modal: true,
        close: function() {
            $('#dialog-modal p').html('');
        }
    });
    $('#dialog-modal').dialog("option", "buttons", [{
            text: "Cancelar",
            click: function() {
                $(this).dialog("close");
            }
        }, {
            text: text_buttom,
            click: function() {
                $(this).dialog("close");
                eval(action_function + '(' + id_element + ')')
            }
        }]);
}

function showModalForm(form, title, width, height) {
    $('#dialog-modal').attr('title', title);
    $('#dialog-modal p').html(form);
    $('#dialog-modal').dialog({
        resizable: false,
        width: width,
        height: height,
        modal: true,
        close: function() {
            $('#dialog-modal p').html('');
        }
    });
}