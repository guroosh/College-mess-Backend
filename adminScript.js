/**
 * Created by Guroosh Chaudhary on 19-11-2016.
 */
$(document).ready(function () {
    var table_data = '';
    var mailing_data = '';
    var feedback_data = '';

    var response;
    var size = 0;
    var meals = null;
    var days = null;
    var names = null;

    function maxOf(b, l, s, d) {
        if (b >= l && b >= s && b >= d)
            return b;
        if (l >= b && l >= s && l >= d)
            return l;
        if (s >= l && s >= b && s >= d)
            return s;
        if (d >= l && d >= s && d >= b)
            return d;
    }
    var new_email = document.getElementById('new_email');
    var new_feedback = document.getElementById('new_feedback');
    var delete_name = document.getElementById('delete_item');
    $("#form1").submit(function(){
        $.get(
            "addNewMailing.php?new_email="+new_email.value,
            function(data)
            {
                window.location.reload();
            }
        );
    });
    $("#form2").submit(function(){
        $.get(
            "addNewFeedbackForm.php?new_feedback="+new_feedback.value,
            function(data)
            {
                window.location.reload();
            }
        );
    });
    $("#delete_form").submit(function(){
        $.get(
            "deleteOneItem.php?name="+delete_name.value,
            function(data)
            {
                window.location.reload();
            }
        );
    });
    var mailing;
    var feedback;
    $.get(
        "getLinks.php",
        function(links)
        {
            response = JSON.parse(links);
            mailing = response['mailing'];
            feedback = response['feedback'];
            mailing_data = '<h3>Current mailing address: '+ mailing +'</h3>';
            feedback_data = '<h3>Current feedback form: '+ feedback +'</h3>';
            document.getElementById('mailing1').innerHTML = mailing_data;
            document.getElementById('feedback1').innerHTML = feedback_data;
            $.get(
                "getAllFood.php",
                function (data) {
                    response = JSON.parse(data);
                    // console.log(response['size']);
                    size = response['size'];
                    meals = response['meal'];
                    days = response['day'];
                    names = response['name'];
                    for (var val = 1; val <= 7; val++) {
                        var b_count = 0;
                        var l_count = 0;
                        var s_count = 0;
                        var d_count = 0;
                        var inner_count = 0;

                        var bfast = [];
                        var lunch = [];
                        var snack = [];
                        var diner = [];
                        table_data = '';
                        for (var i = 0; i < size; i++) {
                            if (days[i] == val) {
                                if (meals[i] == 'breakfast') {
                                    bfast.push(names[i]);
                                    b_count++;
                                }
                                if (meals[i] == 'lunch') {
                                    lunch.push(names[i]);
                                    l_count++;
                                }
                                if (meals[i] == 'snacks') {
                                    snack.push(names[i]);
                                    s_count++;
                                }
                                if (meals[i] == 'dinner') {
                                    diner.push(names[i]);
                                    d_count++;
                                }
                            }
                        }
                        inner_count = maxOf(b_count, l_count, s_count, d_count);

                        for (i = 0; i < inner_count; i++) {
                            var b, l, s, d;
                            if (bfast[i] == null)
                                b = '';
                            else
                                b = bfast[i];
                            if (lunch[i] == null)
                                l = '';
                            else
                                l = lunch[i];
                            if (snack[i] == null)
                                s = '';
                            else
                                s = snack[i];
                            if (diner[i] == null)
                                d = '';
                            else
                                d = diner[i];
                            table_data += '<tr><td>' + b + '</td><td>' + l + '</td><td>' + s + '</td><td>' + d + '</td></tr>';
                        }
                        document.getElementById('table_' + val).innerHTML = table_data;

                    }

                    $("#myForm").submit(function (event) {
                        event.preventDefault();
                        var name = document.getElementById("item_name");
                        var checkValue = [];
                        var mealArray = [];
                        var dayArray = [];
                        name = name.value;
                        var inputElements = document.getElementsByClassName('form-check-input');
                        for (var i = 0; inputElements[i]; ++i) {
                            if (inputElements[i].checked) {
                                checkValue.push(inputElements[i].value);
                            }
                        }
                        console.log(checkValue);
                        var size1 = checkValue.length;
                        for (i = 0; i < size1; i++) {
                            var j = checkValue[i];
                            var row, column;
                            j--;
                            row = 1 + (j / 7);
                            column = 1 + (j % 7);
                            switch (Math.floor(row)) {
                                case 1:
                                    mealArray.push("breakfast");
                                    break;
                                case 2:
                                    mealArray.push("lunch");
                                    break;
                                case 3:
                                    mealArray.push("snacks");
                                    break;
                                case 4:
                                    mealArray.push("dinner");
                                    break;
                            }
                            dayArray.push(column);
                        }
                        console.log(dayArray);
                        console.log(mealArray);
                        console.log(name);
                        var request = {'size': size1, 'dayArray': dayArray, 'mealArray': mealArray, 'name': name};
                        var requestJSON = JSON.stringify(request);
                        $.ajax({
                            url: 'addOneItem.php',
                            type: 'POST',
                            data: requestJSON,
                            success: function (data) {
                                console.log(data);
                                window.location.reload();
                            }
                        });
                    });
                }
            );
        }
    );

});


