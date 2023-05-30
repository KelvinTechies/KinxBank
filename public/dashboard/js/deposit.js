depositForm=document.querySelector('#depositForm')
TransType=document.querySelector('.TransType')
AdminAcct=document.querySelector('.AdminAcct')
trans=document.querySelector('.trans')
userAcct=document.querySelector('.userAcct')
deposit=document.querySelector('.deposited')
amount=document.querySelector('.amount')
fullname=document.querySelector('.fullname')
e=document.querySelector('.successBx')
msgME=document.querySelector('.msgME')
// console.log(e);
// deposit.addEventListener('click', (e)=>{
//     alert('jngt')
// console.log(e);
    
// })

    
// console.log('====================================');
// console.log(trans);
// console.log('====================================');
// e.style.display='none'
xhr=new XMLHttpRequest()

depositForm.addEventListener('submit', (e)=>{
    e.preventDefault()
    data= new FormData
// document.querySelector('.successBx').style.display='none'
    
    alert('GLORY TO GOD')
    // data.append('TransType', depositForm.TransType.value)
    data.append('amount', depositForm.amount.value)
    data.append('TransType', depositForm.TransType.value)
    data.append('fullname', depositForm.fullname.value)
    data.append('AdminAcct', depositForm.AdminAcct.value)
    data.append('userAcct', depositForm.userAcct.value)
    // data.append('trans', depositForm.trans.value)
    data.append('deposited', '')


    xhr.open('POST', '../Authentication.php', true)

    xhr.onreadystatechange=(e)=>{
        if (e.target.status==200 && e.target.readyState==4) {
            resp=e.target.response
            // e.setInterval=((e)=>{

            // },3000)
            if (resp=='deposited') {
                 setInterval=((e)=>{
msgME.innerHTML='Working'
            },3000)
                
            }else{
                msgME.innerHTML=`<p class="alert alert-danger">${resp}</p>`
                
            }
        }
    }
    xhr.send(data)
})