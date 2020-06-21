<?php
namespace Learning\Crud\Console\Command;

use Learning\Crud\Model\UserFactory;
use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class AddUser extends Command
{
    const INPUT_KEY_USERNAME = 'username';
    const INPUT_KEY_TELEPHONE = 'telephone';
    const INPUT_KEY_EMAIL = 'email';

    /**
     * @var UserFactory
     */
    private $userFactory;

    /**
     * AddUser constructor.
     * @param UserFactory $userFactory
     */
    public function __construct(
        UserFactory $userFactory
    ) {
        parent::__construct();
        $this->userFactory = $userFactory;
    }

    protected function configure()
    {
        $this->setName('learning:crud:add')
            ->addArgument(
                self::INPUT_KEY_USERNAME,
                InputArgument::REQUIRED,
                'User Name'
            )->addArgument(
                self::INPUT_KEY_TELEPHONE,
                InputArgument::REQUIRED,
                'User Telephone Number'
            )->addArgument(
                self::INPUT_KEY_EMAIL,
                InputArgument::REQUIRED,
                'User Email'
            );
        $this->setDescription('Add New User. Username telephone email');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = $this->userFactory->create();
        $user->setUsername($input->getArgument(self::INPUT_KEY_USERNAME));
        $user->setTelephone($input->getArgument(self::INPUT_KEY_TELEPHONE));
        $user->setEmail($input->getArgument(self::INPUT_KEY_EMAIL));
        $user->setIsObjectNew(true);
        $user->save();
        return Cli::RETURN_SUCCESS;
    }
}
