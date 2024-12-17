const express = require("express");
const cors = require("cors");
const app = express();
const Razorpay = require("razorpay");
const { products } = require("./data");
const key_id = "rzp_test_3wXeP7I0ITLGgu";
const key_secret = "hLc5PbpcMugBQhwl6izAI04o";
const instance = new Razorpay({
    key_id,
    key_secret,
});

app.use(cors());
app.use(express.json());

app.get("/products", (req, res) => {
    res.status(200).json(products);
});

app.get("/order/:productsId", (req, res) => {
    const { productsId } = req.params;
    const product = products.find((product) => product.id == productsId);
    const amount = product.price * 100 * 70;
    const currency = "INR";
    const receipt = "receipt#123";
    const notes = { desc: product.description };
    instance.orders.create({ amount, currency, receipt, notes }, (error, order) => {
        if (error) {
            return res.status(500).json(error);
        }
        return res.status(200).json(order);
    });
});
app.post("/verify/razorpay-signature", (req, res) => {
    console.log(JSON.stringify(req.body));
    res.status(200);
});
app.listen(8000, () => {
    console.log("server is listening on port 8000");
});

// hLc5PbpcMugBQhwl6izAI04o
