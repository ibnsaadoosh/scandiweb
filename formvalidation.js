function validate()
{
    const sku = document.getElementById("sku");
    if (sku.validity.valueMissing)  
        {sku.setCustomValidity("Please, submit required data")}
    else if (sku.validity.typeMismatch)
        {sku.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {sku.setCustomValidity("");}

    const name = document.getElementById("name");
    if (name.validity.valueMissing)  
        {name.setCustomValidity("Please, submit required data")}
    else if (name.validity.typeMismatch)
        {name.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {name.setCustomValidity("");}

    const price = document.getElementById("price");
    if (price.validity.valueMissing)  
        {price.setCustomValidity("Please, submit required data")}
    else if (price.validity.typeMismatch)
        {price.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {price.setCustomValidity("");}

    const productType = document.getElementById("productType");
    if (productType.validity.valueMissing)  
        {productType.setCustomValidity("Please, submit required data")}
    else
        {productType.setCustomValidity("");}
    
    const size = document.getElementById("size");
    if (size.validity.valueMissing)  
        {size.setCustomValidity("Please, submit required data")}
    else if (size.validity.typeMismatch)
        {size.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {size.setCustomValidity("");}

    const height = document.getElementById("height");
    if (height.validity.valueMissing)  
        {height.setCustomValidity("Please, submit required data")}
    else if (height.validity.typeMismatch)
        {height.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {height.setCustomValidity("");}

    const width = document.getElementById("width");
    if (width.validity.valueMissing)  
        {width.setCustomValidity("Please, submit required data")}
    else if (width.validity.typeMismatch)
        {width.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {width.setCustomValidity("");}

    const length = document.getElementById("length");
    if (length.validity.valueMissing)  
        {length.setCustomValidity("Please, submit required data")}
    else if (length.validity.typeMismatch)
        {length.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {length.setCustomValidity("");}

    const weight = document.getElementById("weight");
    if (weight.validity.valueMissing)  
        {weight.setCustomValidity("Please, submit required data")}
    else if (weight.validity.typeMismatch)
        {weight.setCustomValidity("Please, provide the data of indicated type"); }
    else
        {weight.setCustomValidity("");}
}