<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSBT Updater</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <h2>MSBT Updater</h2>
    @if (session()->has('error'))
            <h4 style="color: red;">{!! session()->get('error') !!}</h4>
    @endif
    @error('modded_file')
        <h4 style="color: red;">{{$message}}</h4>
    @enderror
    @error('type_of_update')
        <h4 style="color: red;">{{$message}}</h4>
    @enderror
    <form method="POST" action="{{action('MSBTController@UpdateMSBT')}}" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td>
                    <label for="modded_file">Modded MSBT File:</label>
                </td>
                <td>
                    <input name="modded_file" type="file" accept=".msbt">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="updated_file">Latest MSBT File:</label>
                </td>
                <td>
                    <select id="select_type" name="type_of_update">
                        <option value="msg_bgm">Music MSBT (9.0.1)</option>
                        <option value="msg_name">Character Names MSBT (9.0.1)</option>
                        <option value="other">Other</option>
                    </select>
                    <input name="updated_file" id="updated_file" type="file" accept=".msbt" style="display: none;">
                </td>
            </tr>
        </table>
        <button type="submit">Update!</button>
    </form>
    <script>
        document.getElementById("select_type").addEventListener("change", function (e) {
            if (this.value == "other") {
                document.getElementById("updated_file").style.display = "inline-block";
            } else {
                document.getElementById("updated_file").style.display = "none";
            };
        });

        window.onload = function () {
            var event = new CustomEvent("change");
            document.getElementById("select_type").dispatchEvent(event);
        }
    </script>


</body>

</html>


