const editFetch = (record) =>{
    toggleBtns();
    document.getElementById('editId').value=record.id;
    document.getElementById('bloodGroup').value=record.bloodGroup;
    document.getElementById('qty').value=record.qty;
   }

   const deleteFetch = (record) =>{
    document.getElementById('deleteItem').value=record.id;
   }

   const toggleBtns = () =>{
     document.getElementById('saveBtn').disabled=true;
     document.getElementById('editBtn').disabled=false;
     document.getElementById('bloodGroup').disabled=true;
   }

   const resetFun = () =>{
     document.getElementById('saveBtn').disabled=false;
     document.getElementById('editBtn').disabled=true;
     document.getElementById('bloodGroup').disabled=false;
     document.getElementById('bloodGroup').value='A+';
     document.getElementById('qty').value='';
     document.getElementById('editId')=null;
   }