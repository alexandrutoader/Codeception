<?php
namespace Search;


use Symfony\Component\Yaml\Yaml;

class User
{
    const USERS_YAML_PATH = 'tests/_data/search.yml';

    /** @var array */
    protected static $parsedUsers;

    /**
     * @throws \RuntimeException
     */
    private static function _initialize()
    {
        $pathToYml = self::USERS_YAML_PATH;
        if (!file_exists($pathToYml)) {
            throw new \RuntimeException(sprintf('Cannot find file %s', $pathToYml));
        }

        $yamlUsers = file_get_contents($pathToYml);
        $parsedUsers = Yaml::parse($yamlUsers);
        self::$parsedUsers = $parsedUsers['users'];
    }

    /**
     * Load username and password key value pair from role
     *
     * @param string $role
     *
     * @throws \RuntimeException
     * @return array
     */
    public static function getByRole($role)
    {
        if (empty(self::$parsedUsers)) {
            self::_initialize();
        }

        return self::$parsedUsers[$role];
    }
}