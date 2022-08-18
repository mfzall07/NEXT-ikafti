function searchAdminList() {
    var input, filter, table, tr, td, cell, i, j;
    filter = document.getElementById("searchAdminList").value.toLowerCase();
    table = document.getElementById("AdminList");
    tr = table.getElementsByTagName("tr");
    for (i = 1; i < tr.length; i++) {
      tr[i].style.display = "none";
      const tdArray = tr[i].getElementsByTagName("td");
      for (var j = 0; j < tdArray.length; j++) {
        const cellValue = tdArray[j];
        if (cellValue && cellValue.innerHTML.toLowerCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break;
        }
      }
    }
}

const getAdminList = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparerAdminList = (idx, asc) => (a, b) => ((v1, v2) => 
    v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getAdminList(asc ? a : b, idx), getAdminList(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');
    Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
        .sort(comparerAdminList(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
        .forEach(tr => table.appendChild(tr) );
})));