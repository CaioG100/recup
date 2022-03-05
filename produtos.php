function create($geral)
    {
        try {
            $con = getConnection();
            $stmt = $con->prepare("INSERT INTO aluno(nome, preço, qestoque, nserie, cod, marca) VALUES (:nome, :preço)");
            $stmt->bindParam(":nome", $infoaluno->nome);
            $stmt->bindParam(":preço", $infoaluno->preço);
            if ($stmt->execute())
                echo "produto cadastrado";
        } catch (PDOException $error) {
            echo "erro. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($stmt);
        }
    }
    function get()
    {
        try {
            $con = getConnection();
            $rs = $con->query("SELECT nome, preço, qestoque FROM geral");
            while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                echo $row->nome . "<br>";
                echo $row->preço . "<br>";
            }
        } catch (PDOException $error) {
            echo "Erro ao listar as cidades. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($rs);
        }
    }
    function find($produto)
    {
        try {
            $con = getConnection();
            $stmt = $con->prepare("SELECT nome, preço, qestoque, nserie, cod, marca FROM geral WHERE nome LIKE :nome");
            $stmt->bindValue(":nome", "%{$nome}%");
            // $stmt->debugDumpParams();
            if($stmt->execute()) {
                if($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                        echo $row->nome . "<br>";
                        echo $row->cpf . "<br>";
                    }
                }
            }
        } catch (PDOException $error) {
            echo "Erro  '{$nome}'. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($stmt);
        }
    }
    function update($preço)
    {
        try {
            $con = getConnection();
            $stmt = $con->prepare("UPDATE cidade SET nome = :nome, cpf = :cpf WHERE cod_aluno = :codigo");
            $stmt->bindParam(":codigo", $cidade->codigo);
            $stmt->bindParam(":nome", $cidade->nome);
            $stmt->bindParam(":cpf", $cidade->uf);
            if ($stmt->execute())
                echo "dados atualizados";
        } catch (PDOException $error) {
            echo "Erro. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($stmt);
        }
    }
    function delete($qestoque)
    {
        try {
            $con = getConnection();
            $stmt = $con->prepare("DELETE FROM cpf WHERE codigo = ?");
            $stmt->bindParam(1, $codigo);
            if ($stmt->execute())
                echo "aluno deletado";
        } catch (PDOException $error) {
            echo "Erro. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($stmt);
        }
    }
    function delete($nserie)
    {
        try {
            $con = getConnection();
            $stmt = $con->prepare("DELETE FROM cpf WHERE codigo = ?");
            $stmt->bindParam(1, $codigo);
            if ($stmt->execute())
                echo "aluno deletado";
        } catch (PDOException $error) {
            echo "Erro. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($stmt);
        }
    }
    function delete($cod)
    {
        try {
            $con = getConnection();
            $stmt = $con->prepare("DELETE FROM cpf WHERE codigo = ?");
            $stmt->bindParam(1, $codigo);
            if ($stmt->execute())
                echo "aluno deletado";
        } catch (PDOException $error) {
            echo "Erro. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($stmt);
        }
    }
    function find($marca)
    {
        try {
            $con = getConnection();
            $stmt = $con->prepare("SELECT nome, preço, qestoque, nserie, cod, marca FROM geral WHERE nome LIKE :nome");
            $stmt->bindValue(":nome", "%{$nome}%");
            // $stmt->debugDumpParams();
            if($stmt->execute()) {
                if($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                        echo $row->nome . "<br>";
                        echo $row->cpf . "<br>";
                    }
                }
            }
        } catch (PDOException $error) {
            echo "Erro  '{$nome}'. Erro: {$error->getMessage()}";
        } finally {
            unset($con);
            unset($stmt);
        }
    }