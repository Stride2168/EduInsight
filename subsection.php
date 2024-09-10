<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <title>sub-Section</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a href="homepage.php" ><img id="brain" src="images/brain.png"></a></li>
            <li><h1 id="title">EduInsight</h1></li>
            <li><a class="sidebar" href="homepage.php">Home</a></li>
            <li><a class="sidebar" href="sections.php">Sections</a></li>
            <li><a class="sidebar" href="grades.php">Grades</a></li>
            <li><a class="sidebar" href="settings.php">Settings</a></li>
            <li><a class="User"href="page2.php">User</a></li>
            <li><a class="logout" href="LOGIN.php">Logout</a></li>
        </ul>
    </div>
    <div id="content">
        <h1>Sections:</h1>
        <div class="w3-container w3-teal">
            <h5>My Page</h5>
            <div class="container">
            <table id="table-to-export" class="table">
                <thead>
                    <tr>
                        <th>Students ID</th>
                        <th>Name</th>
                        <th>Mid term Grade</th>
                        <th>Final Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>s1810405</td>
                        <td>Dominic Rejano</td>
                        <td>89</td>
                        <td>90</td>
                        
                    </tr>
                    <tr>
                        <td>s1810405</td>
                        <td>Cringe mcgyee</td>
                        <td>90</td>
                        <td>80</td>
                        
                    </tr>
                    <tr>
                        <td>s1810405</td>
                        <td>Femtalyn dog</td>
                        <td>90</td>
                        <td>80</td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
        <button class="export" onclick="exportTableToExcel('table-to-export', 'table-data')">Export to Excel</button>
        </div>
    </div>
    <script>
    function exportTableToExcel(tableID, filename = '') {
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        // Triggering the function
        downloadLink.click();
    }
}

        window.addEventListener('load', function () {
            document.body.classList.add('loaded');
        });
    </script>



</body>
</html>
