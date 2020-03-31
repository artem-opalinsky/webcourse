let arr = [];
for(let i = 1 ; i <= 100; i++) {
    arr.push(i);
}
console.log(arr);
for(let i = 0; i < arr.length; i++){
    if (arr[i] % 3 == 0 && arr[i] % 5 == 0) {
        arr[i] = 'foobar';
    }
    else if (arr[i] % 3 == 0){
        arr[i] = 'foo';
    } 
    else if (arr[i] % 5 == 0){
        arr[i] = 'bar';
    }
    else {
    }
}
console.log(arr);
