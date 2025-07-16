const auctions = [
    { id: 1, item: 'Smartphone', currentBid: 150 },
    { id: 2, item: 'Gaming Laptop', currentBid: 450 },
    { id: 3, item: 'Wrist Watch', currentBid: 80 }
];

const auctionList = document.getElementById('auction-list');
const myBidList = document.getElementById('my-bid-list');

function loadAuctions() {
    auctionList.innerHTML = '';
    auctions.forEach(auction => {
        const div = document.createElement('div');
        div.className = 'auction-item';
        div.innerHTML = `
            <h3>${auction.item}</h3>
            <p>Current Bid: $${auction.currentBid}</p>
            <input type=\"number\" id=\"bid-${auction.id}\" placeholder=\"Your Bid\" />
            <button onclick=\"placeBid(${auction.id})\">Place Bid</button>
        `;
        auctionList.appendChild(div);
    });
}

function placeBid(id) {
    const bidInput = document.getElementById(`bid-${id}`);
    const bidAmount = Number(bidInput.value);
    const auction = auctions.find(a => a.id === id);

    if (bidAmount > auction.currentBid) {
        auction.currentBid = bidAmount;
        alert(`Bid placed successfully on ${auction.item}!`);
        updateMyBids(auction.item, bidAmount);
        loadAuctions();
    } else {
        alert('Your bid must be higher than the current bid!');
    }
}

function updateMyBids(item, amount) {
    const li = document.createElement('li');
    li.textContent = `You bid $${amount} on ${item}`;
    myBidList.appendChild(li);
}

document.getElementById('contact-form').addEventListener('submit', function(e){
    e.preventDefault();
    alert('Thank you for contacting us!');
    this.reset();
});

loadAuctions();
