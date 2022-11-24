function search() {
    var input, filter, table, tr, name, is_publish, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("table-list");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        name = tr[i].getElementsByTagName("td")[1];
        is_publish = tr[i].getElementsByTagName("td")[2];
        if (name) {
            txtValue = name.textContent || name.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        } else if (is_publish) {
            txtValue = is_publish.textContent || is_publish.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }            
        }
    }
}