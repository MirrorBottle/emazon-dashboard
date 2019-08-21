function uniqid() {
    let r = Math.round(Math.random() * (1000 - 800) + 800);
    return (Date.now()/r).toString(16).replace('.', '').split('').splice(0, 8).join('');
}