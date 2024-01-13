
let daysVers={};
fetch("https://cors-anywhere.herokuapp.com/devotionalium.com/api/v2?lang=en").then((res)=>{res.length?daysVers=res.json():false;
console.log(daysVers)}).catch(err=>console.log(err))