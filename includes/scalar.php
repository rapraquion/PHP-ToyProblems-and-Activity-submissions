<?php
declare(strict_types=1);
interface IProject {
    const projectName = "Boom.Camp Portal V1.0.0";
    public function setClientName(string $isClient) :? string;
    public function setProjectManagerName(string $myProjectManager) :? string;
    public function setYrDeployed(int $yearDeployed) :? int;
    public function setBuiltInVersion(int $builtInVersion) :? int;
    public function setTechnologyStack(array $technologyStack);
    public function getTechnologyStack() :? array;
    public function setDevelopers(array $developers);
    public function getDevelopers() :? array;
    public function getInfo();
}

class BoomPortal implements IProject {
    private $isClient;
    private $myProjectManager;
    private $yearDeployed;
    private $builtInVersion;
    private $technologyStack;
    private $developers;

    public function setProjectName() {
        return self::projectName;
    }

    public function setClientName($isClient) :? String {
        return $this->isClient = $isClient;
    }

    public function setProjectManagerName($myProjectManager) :? String {
        return $this->myProjectManager = $myProjectManager;
    }

    public function setYrDeployed($yearDeployed) :? int {
        return $this->yearDeployed = $yearDeployed;
    }

    public function setBuiltInVersion($builtInVersion) :? int {
        return $this->builtInVersion = $builtInVersion;
    }

    public function setTechnologyStack(array $technologyStack) {
        $this->technologyStack = $technologyStack;
    }

    public function getTechnologyStack() :? array {
        return $this->technologyStack;
    }

    public function setDevelopers(array $developers) {
        $this->developers = $developers;
    }

    public function getDevelopers() :? array {
        return $this->developers;
    }


    public function getInfo() {
        echo "Project name: <strong>" . self::projectName . "</strong><br />";
        echo "Client: <strong>" . $this->isClient . "</strong><br />";
        echo "Project Manager: <strong>" . $this->myProjectManager . "</strong><br />";
        echo "Year Deployed: <strong>" . $this->yearDeployed . "</strong><br />";
        echo "Build Version: <strong>" . $this->builtInVersion . "</strong><br />";
        echo "Technology Stack: <br />";
    }
}