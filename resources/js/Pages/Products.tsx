import { Button } from "@/Components/ui/button";
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/Components/ui/card";

interface IProduct {
    id: number;
    codebarre: number;
    nom: string;
    prix_ht: number;
    tva: number;
    description: string;
    quantite: number;
    store_id: number;
    created_at: string;
    updated_at: string;
}

interface ProductsProps {
    products: IProduct[];
}

export default function Products({ products }: ProductsProps) {
    function calculateTTC(prixHT: number, tva: number): number {
        const totalTTC = prixHT * (1 + tva / 100);
        return parseFloat(totalTTC.toFixed(2));
    }

    return (
        <>
            {products.map((product) => (
                <Card key={product.id} className="lg:max-w-md w-full">
                    <CardHeader>
                        <CardTitle>{product.nom}</CardTitle>
                        <CardDescription>
                            <div
                                dangerouslySetInnerHTML={{
                                    __html: product.description,
                                }}
                            />
                        </CardDescription>
                    </CardHeader>
                    <CardContent>
                        <p>Product id: {product.id}</p>
                        <p>Product code barre: {product.codebarre}</p>
                        <p>Product quantite: {product.quantite}</p>
                        <p>Product tva: {product.tva}</p>
                        <p>Product prix hors tax: {product.prix_ht}</p>
                        <p>
                            Product created_at:{" "}
                            {new Date(product.created_at).toLocaleString()}
                        </p>
                    </CardContent>
                    <CardFooter>
                        <Button>
                            Buy with $
                            {calculateTTC(product.prix_ht, product.tva)}
                        </Button>
                    </CardFooter>
                </Card>
            ))}
        </>
    );
}
