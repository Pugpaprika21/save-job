// const formSubmitSystem = document.getElementById("form-btn-save-system");

// document.addEventListener("DOMContentLoaded", () => {
//     formSubmitSystem.addEventListener("submit", function(e) {
//         alert("ssssssss");
//     });
// });

function addRow() {
    const table = document.getElementById("add-row-submanu");
    const rowsCount = table.rows.length;
    const newRow = table.insertRow();
    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);
    const cell5 = newRow.insertCell(4);

    cell1.innerHTML = `<div class="mt-2 mb-2 text-center">${rowsCount + 1}</div>`;
    cell2.innerHTML = `<div class="mt-2 mb-2"><input type="text" class="form-control" id="mmss_title" name="mmss_title[]" placeholder="หัวข้อระบบย่อย"></div>`;
    cell3.innerHTML = `<div class="mt-2 mb-2"><input type="text" class="form-control" id="mmss_text" name="mmss_text[]" placeholder="รายละเอียดระบบย่อย"></div>`;
    cell4.innerHTML = `<div class="mt-2 mb-2"><input type="text" class="form-control" id="mmss_path" name="mmss_path[]" placeholder="ลิงค์"></div>`;
    cell5.innerHTML = `<div class="mt-2 mb-2"><div class="text-center"><button class="btn btn-primary btn-sm" type="button" onclick="addRow()">${bootstrap.iconBtn.add} เพิ่มเเถว</button>&nbsp;<button class="btn btn-danger btn-sm" type="button" onclick="deleteRow(this)">${bootstrap.iconBtn.del} ลบเเถว</button></div></div>`;
}

function deleteRow(self) {
    const row = self.parentNode.parentNode.parentNode.parentNode;
    row.parentNode.removeChild(row);
}