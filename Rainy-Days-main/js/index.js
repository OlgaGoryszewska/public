const apiBase = "http://olga-rainy-days-cms.local";
const wooCommerceBase ="/wp-json/wc/store";
const productBase = "/products";

const pagesBase = "/wp-json/wp/v2/pages";

const fullPagesURL = apiBase + pagesBase;
const fullProductURL = apiBase + wooCommerceBase + productBase;
const fullProductURLExample = "http://olga-rainy-days-cms.local/wp-json/wc/store/products";

async function getProducts(){
    const response = await fetch(fullProductURL);

    const products = await response.json();

    return products

}

function createProductHTML(product){
    const container = document.querySelector(".container");

    productContainer = document.createElement("div");
    productContainer.classList.add("product");
    productContainer.id = product.id;

}

async function createProductsHTML(products){
    for (let i = 0; i < products.length; i++) {
    const product = products [i];
    createProductHTML(product)
    }
    console.log(products)
}

async function main() {
    const products = await getProducts()
}