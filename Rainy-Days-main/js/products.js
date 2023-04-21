const apiBase = "http://olga-rainy-days-cms.local";
const wooCommerceBase ="/wp-json/wc/store";
const productBase = "/products";

const pagesBase = "/wp-json/wp/v2/pages";

const fullPagesURL = apiBase + pagesBase;
const fullProductURL = apiBase + wooCommerceBase + productBase;
const fullProductURLExample = "http://olga-rainy-days-cms.local/wp-json/wc/store/products";

console.log(fullProductURLExample)

async function getProducts(){
    const response = await fetch(fullProductURL);

    const products = await response.json();
    

    return products;


}

function createProductPreviewCard(product){
    const container = document.querySelector(".container");

    productContainer = document.createElement("div");
    productContainer.classList.add("product");
    productContainer.id = product.id;

    const img = document.createElement("img");
    const src = product.images[0].src;
    const alt = product.images[0].alt;
    img.src = src;
    img.alt = alt;

    const heading  = document.createElement("h2");
    heading.innerText = product.name;

    const price = document.createElement("span");
    price.innerText = product.prices.price;

    const description = document.createElement("div");
    description.innerHTML = product.description;

    productContainer.append(img);
    productContainer.append(price);
    productContainer.append(heading);
    productContainer.append(description);

    container.append(productContainer)
}

async function createProductsHTML(products){
    for (let i = 0; i < products.length; i++) {
    const product = products [i];
    createProductPreviewCard(product)
    }
    console.log(products)
}

async function main() {
    const products = await getProducts()
    createProductsHTML(products)
}

main()